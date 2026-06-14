import { ComponentFixture, TestBed } from '@angular/core/testing';

import { IndexHospital } from './index-hospital';

describe('IndexHospital', () => {
  let component: IndexHospital;
  let fixture: ComponentFixture<IndexHospital>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [IndexHospital]
    })
    .compileComponents();

    fixture = TestBed.createComponent(IndexHospital);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
