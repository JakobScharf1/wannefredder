import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PortfolioCreativeFour } from './portfolio-creative-four';

describe('PortfolioCreativeFour', () => {
  let component: PortfolioCreativeFour;
  let fixture: ComponentFixture<PortfolioCreativeFour>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [PortfolioCreativeFour]
    })
    .compileComponents();

    fixture = TestBed.createComponent(PortfolioCreativeFour);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
