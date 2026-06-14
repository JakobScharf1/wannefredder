import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PortfolioModernSix } from './portfolio-modern-six';

describe('PortfolioModernSix', () => {
  let component: PortfolioModernSix;
  let fixture: ComponentFixture<PortfolioModernSix>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [PortfolioModernSix]
    })
    .compileComponents();

    fixture = TestBed.createComponent(PortfolioModernSix);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
